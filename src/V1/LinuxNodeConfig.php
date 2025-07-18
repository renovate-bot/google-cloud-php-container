<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters that can be configured on Linux nodes.
 *
 * Generated from protobuf message <code>google.container.v1.LinuxNodeConfig</code>
 */
class LinuxNodeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The Linux kernel parameters to be applied to the nodes and all pods running
     * on the nodes.
     * The following parameters are supported.
     * net.core.busy_poll
     * net.core.busy_read
     * net.core.netdev_max_backlog
     * net.core.rmem_max
     * net.core.rmem_default
     * net.core.wmem_default
     * net.core.wmem_max
     * net.core.optmem_max
     * net.core.somaxconn
     * net.ipv4.tcp_rmem
     * net.ipv4.tcp_wmem
     * net.ipv4.tcp_tw_reuse
     * net.ipv4.tcp_max_orphans
     * net.netfilter.nf_conntrack_max
     * net.netfilter.nf_conntrack_buckets
     * net.netfilter.nf_conntrack_tcp_timeout_close_wait
     * net.netfilter.nf_conntrack_tcp_timeout_time_wait
     * net.netfilter.nf_conntrack_tcp_timeout_established
     * net.netfilter.nf_conntrack_acct
     * kernel.shmmni
     * kernel.shmmax
     * kernel.shmall
     * fs.aio-max-nr
     * fs.file-max
     * fs.inotify.max_user_instances
     * fs.inotify.max_user_watches
     * fs.nr_open
     * vm.dirty_background_ratio
     * vm.dirty_expire_centisecs
     * vm.dirty_ratio
     * vm.dirty_writeback_centisecs
     * vm.max_map_count
     * vm.overcommit_memory
     * vm.overcommit_ratio
     * vm.vfs_cache_pressure
     * vm.swappiness
     * vm.watermark_scale_factor
     * vm.min_free_kbytes
     *
     * Generated from protobuf field <code>map<string, string> sysctls = 1;</code>
     */
    private $sysctls;
    /**
     * cgroup_mode specifies the cgroup mode to be used on the node.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig.CgroupMode cgroup_mode = 2;</code>
     */
    protected $cgroup_mode = 0;
    /**
     * Optional. Amounts for 2M and 1G hugepages
     *
     * Generated from protobuf field <code>optional .google.container.v1.LinuxNodeConfig.HugepagesConfig hugepages = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $hugepages = null;
    /**
     * Optional. Transparent hugepage support for anonymous memory can be entirely
     * disabled (mostly for debugging purposes) or only enabled inside
     * MADV_HUGEPAGE regions (to avoid the risk of consuming more memory
     * resources) or enabled system wide.
     * See https://docs.kernel.org/admin-guide/mm/transhuge.html
     * for more details.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig.TransparentHugepageEnabled transparent_hugepage_enabled = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $transparent_hugepage_enabled = 0;
    /**
     * Optional. Defines the transparent hugepage defrag configuration on the
     * node. VM hugepage allocation can be managed by either limiting
     * defragmentation for delayed allocation or skipping it entirely for
     * immediate allocation only.
     * See https://docs.kernel.org/admin-guide/mm/transhuge.html
     * for more details.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig.TransparentHugepageDefrag transparent_hugepage_defrag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $transparent_hugepage_defrag = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $sysctls
     *           The Linux kernel parameters to be applied to the nodes and all pods running
     *           on the nodes.
     *           The following parameters are supported.
     *           net.core.busy_poll
     *           net.core.busy_read
     *           net.core.netdev_max_backlog
     *           net.core.rmem_max
     *           net.core.rmem_default
     *           net.core.wmem_default
     *           net.core.wmem_max
     *           net.core.optmem_max
     *           net.core.somaxconn
     *           net.ipv4.tcp_rmem
     *           net.ipv4.tcp_wmem
     *           net.ipv4.tcp_tw_reuse
     *           net.ipv4.tcp_max_orphans
     *           net.netfilter.nf_conntrack_max
     *           net.netfilter.nf_conntrack_buckets
     *           net.netfilter.nf_conntrack_tcp_timeout_close_wait
     *           net.netfilter.nf_conntrack_tcp_timeout_time_wait
     *           net.netfilter.nf_conntrack_tcp_timeout_established
     *           net.netfilter.nf_conntrack_acct
     *           kernel.shmmni
     *           kernel.shmmax
     *           kernel.shmall
     *           fs.aio-max-nr
     *           fs.file-max
     *           fs.inotify.max_user_instances
     *           fs.inotify.max_user_watches
     *           fs.nr_open
     *           vm.dirty_background_ratio
     *           vm.dirty_expire_centisecs
     *           vm.dirty_ratio
     *           vm.dirty_writeback_centisecs
     *           vm.max_map_count
     *           vm.overcommit_memory
     *           vm.overcommit_ratio
     *           vm.vfs_cache_pressure
     *           vm.swappiness
     *           vm.watermark_scale_factor
     *           vm.min_free_kbytes
     *     @type int $cgroup_mode
     *           cgroup_mode specifies the cgroup mode to be used on the node.
     *     @type \Google\Cloud\Container\V1\LinuxNodeConfig\HugepagesConfig $hugepages
     *           Optional. Amounts for 2M and 1G hugepages
     *     @type int $transparent_hugepage_enabled
     *           Optional. Transparent hugepage support for anonymous memory can be entirely
     *           disabled (mostly for debugging purposes) or only enabled inside
     *           MADV_HUGEPAGE regions (to avoid the risk of consuming more memory
     *           resources) or enabled system wide.
     *           See https://docs.kernel.org/admin-guide/mm/transhuge.html
     *           for more details.
     *     @type int $transparent_hugepage_defrag
     *           Optional. Defines the transparent hugepage defrag configuration on the
     *           node. VM hugepage allocation can be managed by either limiting
     *           defragmentation for delayed allocation or skipping it entirely for
     *           immediate allocation only.
     *           See https://docs.kernel.org/admin-guide/mm/transhuge.html
     *           for more details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Linux kernel parameters to be applied to the nodes and all pods running
     * on the nodes.
     * The following parameters are supported.
     * net.core.busy_poll
     * net.core.busy_read
     * net.core.netdev_max_backlog
     * net.core.rmem_max
     * net.core.rmem_default
     * net.core.wmem_default
     * net.core.wmem_max
     * net.core.optmem_max
     * net.core.somaxconn
     * net.ipv4.tcp_rmem
     * net.ipv4.tcp_wmem
     * net.ipv4.tcp_tw_reuse
     * net.ipv4.tcp_max_orphans
     * net.netfilter.nf_conntrack_max
     * net.netfilter.nf_conntrack_buckets
     * net.netfilter.nf_conntrack_tcp_timeout_close_wait
     * net.netfilter.nf_conntrack_tcp_timeout_time_wait
     * net.netfilter.nf_conntrack_tcp_timeout_established
     * net.netfilter.nf_conntrack_acct
     * kernel.shmmni
     * kernel.shmmax
     * kernel.shmall
     * fs.aio-max-nr
     * fs.file-max
     * fs.inotify.max_user_instances
     * fs.inotify.max_user_watches
     * fs.nr_open
     * vm.dirty_background_ratio
     * vm.dirty_expire_centisecs
     * vm.dirty_ratio
     * vm.dirty_writeback_centisecs
     * vm.max_map_count
     * vm.overcommit_memory
     * vm.overcommit_ratio
     * vm.vfs_cache_pressure
     * vm.swappiness
     * vm.watermark_scale_factor
     * vm.min_free_kbytes
     *
     * Generated from protobuf field <code>map<string, string> sysctls = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSysctls()
    {
        return $this->sysctls;
    }

    /**
     * The Linux kernel parameters to be applied to the nodes and all pods running
     * on the nodes.
     * The following parameters are supported.
     * net.core.busy_poll
     * net.core.busy_read
     * net.core.netdev_max_backlog
     * net.core.rmem_max
     * net.core.rmem_default
     * net.core.wmem_default
     * net.core.wmem_max
     * net.core.optmem_max
     * net.core.somaxconn
     * net.ipv4.tcp_rmem
     * net.ipv4.tcp_wmem
     * net.ipv4.tcp_tw_reuse
     * net.ipv4.tcp_max_orphans
     * net.netfilter.nf_conntrack_max
     * net.netfilter.nf_conntrack_buckets
     * net.netfilter.nf_conntrack_tcp_timeout_close_wait
     * net.netfilter.nf_conntrack_tcp_timeout_time_wait
     * net.netfilter.nf_conntrack_tcp_timeout_established
     * net.netfilter.nf_conntrack_acct
     * kernel.shmmni
     * kernel.shmmax
     * kernel.shmall
     * fs.aio-max-nr
     * fs.file-max
     * fs.inotify.max_user_instances
     * fs.inotify.max_user_watches
     * fs.nr_open
     * vm.dirty_background_ratio
     * vm.dirty_expire_centisecs
     * vm.dirty_ratio
     * vm.dirty_writeback_centisecs
     * vm.max_map_count
     * vm.overcommit_memory
     * vm.overcommit_ratio
     * vm.vfs_cache_pressure
     * vm.swappiness
     * vm.watermark_scale_factor
     * vm.min_free_kbytes
     *
     * Generated from protobuf field <code>map<string, string> sysctls = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSysctls($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->sysctls = $arr;

        return $this;
    }

    /**
     * cgroup_mode specifies the cgroup mode to be used on the node.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig.CgroupMode cgroup_mode = 2;</code>
     * @return int
     */
    public function getCgroupMode()
    {
        return $this->cgroup_mode;
    }

    /**
     * cgroup_mode specifies the cgroup mode to be used on the node.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig.CgroupMode cgroup_mode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCgroupMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\LinuxNodeConfig\CgroupMode::class);
        $this->cgroup_mode = $var;

        return $this;
    }

    /**
     * Optional. Amounts for 2M and 1G hugepages
     *
     * Generated from protobuf field <code>optional .google.container.v1.LinuxNodeConfig.HugepagesConfig hugepages = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Container\V1\LinuxNodeConfig\HugepagesConfig|null
     */
    public function getHugepages()
    {
        return $this->hugepages;
    }

    public function hasHugepages()
    {
        return isset($this->hugepages);
    }

    public function clearHugepages()
    {
        unset($this->hugepages);
    }

    /**
     * Optional. Amounts for 2M and 1G hugepages
     *
     * Generated from protobuf field <code>optional .google.container.v1.LinuxNodeConfig.HugepagesConfig hugepages = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Container\V1\LinuxNodeConfig\HugepagesConfig $var
     * @return $this
     */
    public function setHugepages($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\LinuxNodeConfig\HugepagesConfig::class);
        $this->hugepages = $var;

        return $this;
    }

    /**
     * Optional. Transparent hugepage support for anonymous memory can be entirely
     * disabled (mostly for debugging purposes) or only enabled inside
     * MADV_HUGEPAGE regions (to avoid the risk of consuming more memory
     * resources) or enabled system wide.
     * See https://docs.kernel.org/admin-guide/mm/transhuge.html
     * for more details.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig.TransparentHugepageEnabled transparent_hugepage_enabled = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getTransparentHugepageEnabled()
    {
        return $this->transparent_hugepage_enabled;
    }

    /**
     * Optional. Transparent hugepage support for anonymous memory can be entirely
     * disabled (mostly for debugging purposes) or only enabled inside
     * MADV_HUGEPAGE regions (to avoid the risk of consuming more memory
     * resources) or enabled system wide.
     * See https://docs.kernel.org/admin-guide/mm/transhuge.html
     * for more details.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig.TransparentHugepageEnabled transparent_hugepage_enabled = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setTransparentHugepageEnabled($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\LinuxNodeConfig\TransparentHugepageEnabled::class);
        $this->transparent_hugepage_enabled = $var;

        return $this;
    }

    /**
     * Optional. Defines the transparent hugepage defrag configuration on the
     * node. VM hugepage allocation can be managed by either limiting
     * defragmentation for delayed allocation or skipping it entirely for
     * immediate allocation only.
     * See https://docs.kernel.org/admin-guide/mm/transhuge.html
     * for more details.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig.TransparentHugepageDefrag transparent_hugepage_defrag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getTransparentHugepageDefrag()
    {
        return $this->transparent_hugepage_defrag;
    }

    /**
     * Optional. Defines the transparent hugepage defrag configuration on the
     * node. VM hugepage allocation can be managed by either limiting
     * defragmentation for delayed allocation or skipping it entirely for
     * immediate allocation only.
     * See https://docs.kernel.org/admin-guide/mm/transhuge.html
     * for more details.
     *
     * Generated from protobuf field <code>.google.container.v1.LinuxNodeConfig.TransparentHugepageDefrag transparent_hugepage_defrag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setTransparentHugepageDefrag($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\LinuxNodeConfig\TransparentHugepageDefrag::class);
        $this->transparent_hugepage_defrag = $var;

        return $this;
    }

}

